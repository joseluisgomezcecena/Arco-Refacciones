<?php
class SearchController extends CI_Controller {

	public function autocomplete() {
		$query = $this->input->get('query'); // Get the search query from the client

		// Perform a search in your database based on the query
		$results = $this->ProductModel->search($query);

		// Return results as JSON
		header('Content-Type: application/json');
		echo json_encode($results);
	}
}
