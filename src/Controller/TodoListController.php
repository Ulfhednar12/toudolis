<?php
// ...

use App\Entity\Task;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends AbstractController
{
    /**
     * @Route("/todo-list", name="todo_list")
     */
    public function index(): Response
    {
        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();

        return $this->render('todo_list/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }
}
