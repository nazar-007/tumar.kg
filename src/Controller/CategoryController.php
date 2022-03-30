<?php

namespace App\Controller;

use App\Entity\Category;
use SebastianBergmann\Complexity\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    /**
     * @Route("/category/add", name="app_category_add")
     */
    public function addCategory(): Response
    {
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $category= new Category();
        $category->setTitle('Goods');

        // tell Doctrine you want to (eventually) save the Category (no queries yet)
        $entityManager->persist($category);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new category with id '.$category->getId());
    }

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function show($id)
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category found for id '.$id
            );
        }

        return $this->render('category/show.html.twig', array(
            'category' => $category,
        ));

    }

    /**
     * @Route("/category_list", name="category_list")
     */
    public function list()
    {
        $repository = $this->getDoctrine()->getRepository(Category::class);
        $categories = $repository->findAll();

        return $this->render('category/list.html.twig', array(
            'categories' => $categories,
        ));

    }

    /**
     * @Route("/category/update/{id}", name="category_update")
     */
    public function update($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $entityManager->getRepository(Category::class)->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category found for id '.$id
            );
        }

        $category->setTitle(rand(1, 10000));
        $entityManager->flush();

        return $this->redirectToRoute('category_list');
    }

    /**
     * @Route("/category/delete/{id}", name="category_delete")
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $entityManager->getRepository(Category::class)->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category found for id '.$id
            );
        }

        $entityManager->remove($category);
        $entityManager->flush();

        return $this->redirectToRoute('category_list');
    }

    /**
     * @Route("/category_add_form", name="category_add_form")
     */

    public function addForm(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $category = new Category();
        $category->setTitle('Write a blog post');

        $form = $this->createFormBuilder($category)
            ->add('title', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $category = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($category);
             $entityManager->flush();

            return $this->redirectToRoute('category_list');
        }

        return $this->render('category/add_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
