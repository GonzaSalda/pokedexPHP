<?php

class PokemonsController {
    private $pokemonModel;
    private $view;

    public function __construct($pokemonModel, $view) {
        $this->pokemonModel = $pokemonModel;
        $this->view = $view;
    }

    public function list() {
        $data["pokemons"] = $this->pokemonModel->getPokemon();
        $this->view->render('view/body.php', $data); //pasar a la plantilla body la informacion de data
    }

    public function searched() {
        $data["pokemons"] = $this->pokemonModel->search();
       $this->view->render('view/pokemonEncontrado.php',$data);
    }



}