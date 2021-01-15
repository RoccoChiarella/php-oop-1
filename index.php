<?php
    class movie{
        public $name;
        public $total_votes = array(3,4);
        public $avarange_rating = 0;

        function __construct($name) {
            $this->name = $name;
        }

        function setRating($user_vote) {
            array_push($this->total_votes, $user_vote);
            $this->avarange_rating = array_sum($this->total_votes) / count($this->total_votes);
        }

        function getRating() {
            return $this->avarange_rating;
        }
    }

    $movie = new movie('Inception');
    echo "Il film è: ". $movie->name ."<br>";
    echo "Ha un totale di ". count($movie->total_votes) ." voti<br>";
    $movie->setRating(5);
    $new_avarange_rating = $movie->getRating();
    echo "Aggiungendo il tuo voto il film ha una media in voti di ". $new_avarange_rating;
?>
