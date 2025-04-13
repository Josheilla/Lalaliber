<?php
	class myCon{
		private $conn;
		
		public function __construct(){
			$this->conn = new PDO(
			"mysql:host=localhost;dbname=projectdb",
			"root",
			""
			);
		}
		
		public function __destruct(){
		
		}
		
		public function getConnection() {
			return $this->conn;
		}
		
		
		public function getAllStaff(){
			$query ="SELECT * FROM staff";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllBook(){
			$query ="SELECT * FROM book";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllCategory(){
			$query ="SELECT * FROM category";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllSupplier(){
			$query ="SELECT * FROM supplier";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllPublisher(){
			$query ="SELECT * FROM publisher";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllTransaction(){
			$query ="SELECT * FROM transaction";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function getAllCustomer(){
			$query ="SELECT * FROM customer";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function delBook($book){
			$query ="DELETE FROM book WHERE title = '$book'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function delPublisher($publisher){
			$query = "DELETE FROM publisher WHERE publisher_name = '$publisher'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function delCustomer($customer){
			$query = "DELETE FROM customer WHERE cust_name = '$customer'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function delStaff($staff){
			$query = "DELETE FROM staff WHERE staff_name = '$staff'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function delSupplier($supplier){
			$query = "DELETE FROM supplier WHERE supplier_name = '$supplier'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function updateBook($price, $stock, $book_id){
			$query ="UPDATE book SET price = '$price', stock = '$stock' WHERE book_id = '$book_id'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function updatePublisher($publisher_name, $address, $phone_number, $publisher_id){
			$query ="UPDATE publisher SET publisher_name = '$publisher_name', address = '$address', 
			phone_number = '$phone_number' WHERE publisher_id = '$publisher_id'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function updateCustomer($cust_name, $email, $address, $phone_number, $cust_id){
			$query ="UPDATE customer SET cust_name = '$cust_name', email = '$email', address = '$address', 
			phone_number = '$phone_number' WHERE cust_id = '$cust_id'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function updateStaff($staff_name, $position, $shift, $salary, $phone_number, $staff_id){
			$query ="UPDATE staff SET staff_name = '$staff_name', position = '$position', shift = '$shift', 
			salary = '$salary', phone_number = '$phone_number' WHERE staff_id = '$staff_id'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function updateSupplier($supplier_name, $title, $manufacturer, $phone_number, $supplier_id){
			$query ="UPDATE supplier SET supplier_name = '$supplier_name', title = '$title', manufacturer = '$manufacturer',
			phone_number = '$phone_number' WHERE supplier_id = '$supplier_id'";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function addBook($book_id, $title, $supplier_id, $publisher_id, $author, $publication_year, $price, $stock){
			$query ="INSERT INTO book (book_id, title, supplier_id, publisher_id, author, publication_year, price, stock) VALUES 
			('$book_id', '$title', '$supplier_id', '$publisher_id', '$author', '$publication_year', '$price', '$stock')";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		public function addPublisher($publisher_name, $publisher_id, $address, $phone_number){
			$query ="INSERT INTO publisher (publisher_id, publisher_name, address, phone_number) VALUES 
			('$publisher_id', '$publisher_name', '$address', '$phone_number')";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function addCustomer($cust_name, $cust_id, $email, $phone_number, $address){
			$query ="INSERT INTO customer (cust_id, cust_name, email, phone_number, address) VALUES 
			('$cust_id', '$cust_name', '$email', '$phone_number', '$address')";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function addStaff($staff_name, $staff_id, $position, $shift, $salary, $phone_number){
			$query ="INSERT INTO staff (staff_id, staff_name, position, shift, salary, phone_number) VALUES 
			('$staff_id', '$staff_name', '$position', '$shift', '$salary', '$phone_number')";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		public function addSupplier($supplier_name, $title, $manufacturer, $phone_number, $supplier_id){
			$query ="INSERT INTO supplier (supplier_name, title, manufacturer, phone_number, supplier_id) VALUES 
			('$supplier_name', '$title', '$manufacturer', '$phone_number', '$supplier_id')";
			$result = $this->conn->prepare($query);
			$result->execute();
			return $result;
		}
		
		
	}

?>