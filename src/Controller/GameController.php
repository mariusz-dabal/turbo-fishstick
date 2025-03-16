<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class GameController extends AbstractController
{
    #[Route('/game', name: 'app_game')]
    public function index(): JsonResponse
    {
        //Game logic:
        // $gameFactory = new SimpleGameFactory();
        // $player = $gameFactory->createPlayer('Player', CharacterEnum::ARCHER);
        // $enemy = $gameFactory->createEnemy(CharacterEnum::MAGE);
        // $game = new Game($player, $enemy);
        // $response = $game->play();





        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GameController.php',
        ]);
    }
}
