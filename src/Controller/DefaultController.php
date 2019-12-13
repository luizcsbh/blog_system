<?php 
namespace App\Controller;

use App\Mailer\SimpleMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @var SimpleMailer
     */
    private $mailer;

    /**
     * DefaultController Constructor
     * @param SimpleMailer $mailer
     */

    public function __construct(SimpleMailer $mailer)
    {
        $this->mailer = $mailer;
    }
    
    public function index(string $name): Response
    {
        
        $this->mailer->send('john@doe.com', 'hello John');

        return $this->render('hello.html.twig',['name' => $name]);
    }
}
?>