<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Vich\UploaderBundle as Vich;

#[Route('/livres', name: 'book.')]
final class BookController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(Request $request, BookRepository $repository): Response
    {
        $page = $request->query->getInt('page', 1);
        $books = $repository->paginateBook($page);

        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
            'books' => $books
        ]);
    }

    #[Route('/ajouter', name : 'create')]
    public function create(Request $request, EntityManagerInterface $em, FormFactoryInterface $formFactory) {
        $book = new Book();
        $form = $formFactory->create(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($book);
            $em->flush();
            $this->addFlash('success', 'Livre ajouté');
            return $this->redirectToRoute('book.index');
        }
        return $this->render('book/create.html.twig', [
            'bookForm' => $form
        ]);
    }


    #[Route('/{slug}-{id}', name: 'details', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function bookDetails(Request $request, Book $book): Response {
        return $this->render('book/show.html.twig', [
            'book' => $book
        ]);
    }

    #[Route('/{slug}-{id}/editer', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function editBook (Book $book, Request $request, EntityManagerInterface $em, FormFactoryInterface $formFactory) {
        $form = $formFactory->create(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Les modifications ont bien été enregistrée');
            return $this->redirectToRoute('book.index');
        }
        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'bookForm' => $form
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['DELETE'], requirements: ['id' => Requirement::DIGITS])]
    public function removeBook(Book $book, EntityManagerInterface $em) {
        $em->remove($book);
        $em->flush();
        $this->addFlash('success', 'Tajet supprimé');
        return $this->redirectToRoute('book.index');
    }
}
