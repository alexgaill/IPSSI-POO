<?php

namespace App\Interfaces;

interface ManagerInterface {

    public function create($article);

    public function getList();

    public function getOne(int $id);

    public function update();

    public function delete();
}