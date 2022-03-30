<?php

namespace App\Controller;

use App\Entity\Product;
use SebastianBergmann\Complexity\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="app_product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/product/add", name="app_product_add")
     */
    public function addProduct(): Response
    {
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setTitle('Keyboard');
        $product->setPrice(1999);
        $product->setDescription('Ergonomic and stylish!');
        $product->setCategoryId(5);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('product/show.html.twig', array(
            'product' => $product,
        ));

    }

    /**
     * @Route("/product_list", name="product_list")
     */
    public function list()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();

        return $this->render('product/list.html.twig', array(
            'products' => $products,
        ));

    }

    /**
     * @Route("/product/update/{id}", name="product_update")
     */
    public function update($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setTitle(rand(1, 10000));
        $entityManager->flush();

        return $this->redirectToRoute('product_list');

//        return $this->redirectToRoute('product_show', [
//            'id' => $product->getId()
//        ]);
    }

    /**
     * @Route("/product/delete/{id}", name="product_delete")
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('product_list');
    }

    /**
     * @Route("/product_other_list", name="product_other_list")
     */
    public function otherList() {
        $minPrice = 0;

        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAllGreaterThanPrice($minPrice);

        echo "<pre>";
        print_r($products);
        echo "<pre>";
        die;

        return $products;
    }

    /**
     * @Route("/product_add_form", name="product_add_form")
     */

    public function addForm(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $product = new Product();
        $product->setTitle('Write a blog post');
        $product->setPrice(200);
        $product->setDescription('Some desc');
        $product->setCategoryId(1);

        $form = $this->createFormBuilder($product)
            ->add('title', TextType::class)
            ->add('price', IntegerType::class)
            ->add('description', TextType::class)
            ->add('categoryId', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $product = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($product);
             $entityManager->flush();

            return $this->redirectToRoute('product_list');
        }

        return $this->render('product/add_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function calculator() {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}
