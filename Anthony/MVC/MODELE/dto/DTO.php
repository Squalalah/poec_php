<?php
  interface DTO
   {
	public function update($data);
	public function insert($data);
	public function delete($data);
	public function selectById($id);
	public function selectAll();
}
?>
