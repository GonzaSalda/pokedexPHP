<?php

class PokemonsController {
    private $pokemonModel;

    public function __construct($pokemonModel) {
        $this->pokemonModel = $pokemonModel;
    }

    public function list() {
        $pokemons = $this->pokemonModel->getPokemon();
        include_once('view/body.php');
    }

    public function searched() {
        $pokemons = $this->pokemonModel->search();
        include_once('view/pokemonEncontrado.php');
    }



}