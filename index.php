<?php

    //  - definire una classe 'Movie'
    class Movie {

        // proprietà di Movie:
        // titolo, anno, genere, regista, durata, descrizione, disponibile in streaming

        public $title;
        public $year;

        // ↓ il private serve per controllare gli accessi in lettura e in scrittura
        private $genre;

        public $director;
        public $duration;
        public $description;
        public $availableForStreaming;

        // Il COSTRUTTORE(__construct()) di una classe esiste sempre, e viene richiamato quando istanziamo un nuovo oggetto di una classe
        // Ci constente di fare qualsiasi operazione sulla classe
        // Possiamo usarlo per delle operazioni di default su tutte le istanze
        public function __construct(string $title, $genre) // ← firma della funzione
        {
            $this->title = $title;

            // Conviene richiamare la funzione e non la proprietà in quanto si perderebbe il controllo is_string
            $this->setGenre($genre);

            $this->director = 'Undefined';
            $this->description = 'Undefined';
        }


        // definire una function specifica per modificare una proprietà (setter)
        public function setGenre($genre)

        {       // is_string serve per controllare se il valore è una stringa
            if (is_string($genre)) {
                $this->genre = $genre;
            }
            else {
                echo '<h4>ERRORE stringa</h4>';
            }
        }

    }

    //  variabile = oggetto(istanza di classe Movie)
    $movieOne = new Movie('Una notte al museo', 'Commedia');

    // come modificare valore title passando da una variabile (dall'esterno)
    // $movieOne->title = 'Una notte al museo';

    // come modificare passando da una function (dall'interno)
    // $movieOne->setGenre('Commedia');

    var_dump($movieOne);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
</body>
</html>