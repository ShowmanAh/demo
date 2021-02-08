<?php
namespace App\Repositories;
interface RepositoryInterface {
public function all();
public function create(array $data);
public function getByID($id);
public function update(array $data, $id);
public function show($id);
public function delete($id);
}

?>
