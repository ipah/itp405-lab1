<?php


	namespace Spotify;
	use PDO;

	class Track{
		public $Name;
		protected $Bytes;


		public static function find($id,$pdo){
			
			$sql = "select * from tracks where TrackId = ?";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1, $id);
			$statement->execute();
			$track = $statement->fetch(PDO::FETCH_OBJ);

			return new Track($track);
		}


		public static function all($pdo){
			$sql = 'select * from tracks;';
			$statement = $pdo->prepare($sql);
			
			$statement->execute();

			$tracks = $statement->fetchAll(PDO::FETCH_OBJ);

			$all_tracks = [];

			foreach($tracks as $track){
				$all_tracks[]= new Track($track);
			}

			return $all_tracks;

		}
		

		public function __construct($track){

			$this->Name = $track->Name;
			$this->Bytes = $track->Bytes;
		}

		public function getSize($unit){
			switch ($unit) {
				case 'B':
					return $this->Bytes;
					
				
				case 'KB':
					return $this->Bytes*pow(10,-3);
					
				case 'MB':
					return $this->Bytes*pow(10,-6);
			}
		}

	}
?>