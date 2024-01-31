<?php
/*
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(5, 8);
echo "Length: " . $rectangle->getLength() . "\n";
echo "Width: " . $rectangle->getWidth() . "\n";
echo "Area: " . $rectangle->calculateArea() . "\n";
echo "Perimeter: " . $rectangle->calculatePerimeter() . "\n";


class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return M_PI * pow($this->radius, 2);
    }

    public function calculateCircumference() {
        return 2 * M_PI * $this->radius;
    }
}

$circle = new Circle(3);
echo "Radius: " . $circle->getRadius() . "\n";
echo "Area: " . $circle->calculateArea() . "\n";
echo "Circumference: " . $circle->calculateCircumference() . "\n";


abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$triangle = new Triangle(4, 6);
$rectangle = new Rectangle(5, 8);

echo "Triangle Area: " . $triangle->calculateArea() . "\n";
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";



interface Resizable {
    public function resize($percentage);
}

class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getSide() {
        return $this->side;
    }

    public function setSide($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return pow($this->side, 2);
    }

    public function resize($percentage) {
        $this->side *= (1 + $percentage / 100);
    }
}

$square = new Square(4);
echo "Initial Square Side: " . $square->getSide() . "\n";
echo "Initial Square Area: " . $square->calculateArea() . "\n";

$square->resize(20);
echo "Resized Square Side: " . $square->getSide() . "\n";
echo "Resized Square Area: " . $square->calculateArea() . "\n";


class Vehicle {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Vehicle Details:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }
}

$car = new Vehicle("Toyota", "Camry", 2022);
$car->displayDetails();



class LibraryItem {
    protected $title;
    protected $barcode;

    public function __construct($title, $barcode) {
        $this->title = $title;
        $this->barcode = $barcode;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getBarcode() {
        return $this->barcode;
    }

    public function setBarcode($barcode) {
        $this->barcode = $barcode;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . "\n";
        echo "Barcode: " . $this->barcode . "\n";
    }
}

class Book extends LibraryItem {
    protected $author;
    protected $numPages;

    public function __construct($title, $barcode, $author, $numPages) {
        parent::__construct($title, $barcode);
        $this->author = $author;
        $this->numPages = $numPages;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getNumPages() {
        return $this->numPages;
    }

    public function setNumPages($numPages) {
        $this->numPages = $numPages;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Author: " . $this->author . "\n";
        echo "Number of Pages: " . $this->numPages . "\n";
    }
}

class DVD extends LibraryItem {
    protected $director;
    protected $runTime;

    public function __construct($title, $barcode, $director, $runTime) {
        parent::__construct($title, $barcode);
        $this->director = $director;
        $this->runTime = $runTime;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getRunTime() {
        return $this->runTime;
    }

    public function setRunTime($runTime) {
        $this->runTime = $runTime;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Director: " . $this->director . "\n";
        echo "Run Time: " . $this->runTime . " minutes\n";
    }
}

$book = new Book("Lot nad kukułczym gniazdem", "000001", "Kesey", 250);
$dvd = new DVD("Dziewiąte wrota", "1111111", "Polański", 250);

echo "Book Info:\n";
$book->displayInfo();
echo "\n";

echo "DVD Info:\n";
$dvd->displayInfo();
echo "\n";


class Student {
    private $name;
    private $age;
    private $class;

    public function __construct($name, $age, $class) {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function displayInfo() {
        echo "Student Information:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . " years\n";
        echo "Class: " . $this->class . "\n";
    }
}

$student = new Student("Mateusz Kołtowski", 23, "000");
$student->displayInfo();


class KontoBankowe {
    private $numerKonta;
    private $saldo;

    public function __construct($numerKonta, $saldo = 0) {
        $this->numerKonta = $numerKonta;
        $this->saldo = $saldo;
    }

    public function getNumerKonta() {
        return $this->numerKonta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function wpłacPieniądze($kwota) {
        if ($kwota > 0) {
            $this->saldo += $kwota;
            echo "Wpłata wykonana pomyślnie. Aktualne saldo: " . $this->saldo . "\n";
        } else {
            echo "Błąd: Wpłacana kwota musi być większa od zera.\n";
        }
    }

    public function wypłaćPieniądze($kwota) {
        if ($kwota > 0 && $kwota <= $this->saldo) {
            $this->saldo -= $kwota;
            echo "Wypłata wykonana pomyślnie. Aktualne saldo: " . $this->saldo . "\n";
        } elseif ($kwota > $this->saldo) {
            echo "Błąd: Brak wystarczających środków na koncie.\n";
        } else {
            echo "Błąd: Wypłacana kwota musi być większa od zera.\n";
        }
    }
}

$konto = new KontoBankowe("123456789");

echo "Numer konta: " . $konto->getNumerKonta() . "\n";
echo "Saldo: " . $konto->getSaldo() . "\n";

$konto->wpłacPieniądze(1000);
$konto->wypłaćPieniądze(500);
$konto->wypłaćPieniądze(700);



abstract class Zwierzę {
    protected $imię;

    public function __construct($imię) {
        $this->imię = $imię;
    }

    abstract public function jeść();

    abstract public function wydawaćDźwięk();
}

class Pies extends Zwierzę {
    public function jeść() {
        echo $this->imię . " je karmę dla psów.\n";
    }

    public function wydawaćDźwięk() {
        echo $this->imię . " szczeka: 'Hau, hau!'\n";
    }
}

class Kot extends Zwierzę {
    public function jeść() {
        echo $this->imię . " je karmę dla kotów.\n";
    }

    public function wydawaćDźwięk() {
        echo $this->imię . " miauczy: 'Miau!'\n";
    }
}

class Ptak extends Zwierzę {
    public function jeść() {
        echo $this->imię . " je ziarno.\n";
    }

    public function wydawaćDźwięk() {
        echo $this->imię . " śpiewa: 'Ćwir, ćwir!'\n";
    }
}

$pies = new Pies("Burek");
$kot = new Kot("Mruczek");
$ptak = new Ptak("Ptaszek");

$pies->jeść();
$pies->wydawaćDźwięk();

$kot->jeść();
$kot->wydawaćDźwięk();

$ptak->jeść();
$ptak->wydawaćDźwięk();



class Osoba {
    private $imię;
    private $wiek;

    public function __construct($imię, $wiek) {
        $this->imię = $imię;
        $this->wiek = $wiek;
    }

    public function getImię() {
        return $this->imię;
    }

    public function setImię($imię) {
        $this->imię = $imię;
    }

    public function getWiek() {
        return $this->wiek;
    }

    public function setWiek($wiek) {
        $this->wiek = $wiek;
    }

    public function __toString() {
        return "Osoba: " . $this->imię . ", Wiek: " . $this->wiek;
    }
}

$osoba = new Osoba("Mateusz Kołtowski", 23);

echo $osoba;



class Osoba {
    private $imię;
    private $wiek;

    public function __construct($imię, $wiek) {
        $this->imię = $imię;
        $this->wiek = $wiek;
    }

    public function getImię() {
        return $this->imię;
    }

    public function setImię($imię) {
        $this->imię = $imię;
    }

    public function getWiek() {
        return $this->wiek;
    }

    public function setWiek($wiek) {
        $this->wiek = $wiek;
    }

    public function __toString() {
        return "Osoba: " . $this->imię . ", Wiek: " . $this->wiek;
    }
}

class Pracownik extends Osoba {
    private $pensja;
    private $stanowisko;

    public function __construct($imię, $wiek, $pensja, $stanowisko) {
        parent::__construct($imię, $wiek);
        $this->pensja = $pensja;
        $this->stanowisko = $stanowisko;
    }

    public function getPensja() {
        return $this->pensja;
    }

    public function setPensja($pensja) {
        $this->pensja = $pensja;
    }

    public function getStanowisko() {
        return $this->stanowisko;
    }

    public function setStanowisko($stanowisko) {
        $this->stanowisko = $stanowisko;
    }

    public function wyświetlSzczegóły() {
        echo "Pracownik: " . $this->getImię() . ", Wiek: " . $this->getWiek() . "\n";
        echo "Stanowisko: " . $this->stanowisko . ", Pensja: " . $this->pensja . "\n";
    }
}

$pracownik = new Pracownik("Mateusz Kołtowski", 23, 5000, "Programista");
$pracownik->wyświetlSzczegóły();


interface Comparable {
    public function compareTo($other);
}

class Produkt implements Comparable {
    private $nazwa;
    private $cena;

    public function __construct($nazwa, $cena) {
        $this->nazwa = $nazwa;
        $this->cena = $cena;
    }

    public function getNazwa() {
        return $this->nazwa;
    }

    public function setNazwa($nazwa) {
        $this->nazwa = $nazwa;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }

    public function compareTo($other) {
        if ($other instanceof Produkt) {
            if ($this->cena == $other->getCena()) {
                return 0;
            } elseif ($this->cena < $other->getCena()) {
                return -1;
            } else {
                return 1; 
            }
        } else {
            throw new InvalidArgumentException("Porównywanie do obiektu, który nie jest instancją klasy Produkt.");
        }
    }
}

$produkt1 = new Produkt("Laptop", 1500);
$produkt2 = new Produkt("Smartfon", 1200);

if ($produkt1->compareTo($produkt2) == 0) {
    echo $produkt1->getNazwa() . " ma taką samą cenę jak " . $produkt2->getNazwa() . ".\n";
} elseif ($produkt1->compareTo($produkt2) < 0) {
    echo $produkt1->getNazwa() . " jest tańszy niż " . $produkt2->getNazwa() . ".\n";
} else {
    echo $produkt1->getNazwa() . " jest droższy niż " . $produkt2->getNazwa() . ".\n";
}



class Logger {
    public static $logCount = 0;

    public static function logMessage($message) {
        echo "Log #" . ++self::$logCount . ": " . $message . "\n";
    }
}

Logger::logMessage("This is a log message.");
Logger::logMessage("Another log entry.");

echo "Total log count: " . Logger::$logCount . "\n";



class Matematyka {
    public static function dodaj($liczba1, $liczba2) {
        return $liczba1 + $liczba2;
    }

    public static function odejmij($liczba1, $liczba2) {
        return $liczba1 - $liczba2;
    }

    public static function pomnóż($liczba1, $liczba2) {
        return $liczba1 * $liczba2;
    }
}

$wynikDodawania = Matematyka::dodaj(5, 3);
echo "Wynik dodawania: " . $wynikDodawania . "\n";

$wynikOdejmowania = Matematyka::odejmij(8, 2);
echo "Wynik odejmowania: " . $wynikOdejmowania . "\n";

$wynikMnożenia = Matematyka::pomnóż(4, 6);
echo "Wynik mnożenia: " . $wynikMnożenia . "\n";



class Plik {
    private $nazwa;
    private $rozmiar;

    public function __construct($nazwa, $rozmiar) {
        $this->nazwa = $nazwa;
        $this->rozmiar = $rozmiar;
    }

    public function getNazwa() {
        return $this->nazwa;
    }

    public function setNazwa($nazwa) {
        $this->nazwa = $nazwa;
    }

    public function getRozmiar() {
        return $this->rozmiar;
    }

    public function setRozmiar($rozmiar) {
        $this->rozmiar = $rozmiar;
    }

    public static function obliczCałkowityRozmiar(array $pliki) {
        $całkowityRozmiar = 0;

        foreach ($pliki as $plik) {
            if ($plik instanceof Plik) {
                $całkowityRozmiar += $plik->getRozmiar();
            } else {
                throw new InvalidArgumentException("Przekazano obiekt, który nie jest instancją klasy Plik.");
            }
        }

        return $całkowityRozmiar;
    }
}

$plik1 = new Plik("plik1.txt", 1024);
$plik2 = new Plik("plik2.txt", 2048);
$plik3 = new Plik("plik3.txt", 512);

$pliki = [$plik1, $plik2, $plik3];

$całkowityRozmiar = Plik::obliczCałkowityRozmiar($pliki);

echo "Całkowity rozmiar plików: " . $całkowityRozmiar . " bajtów\n";



class Kalkulator {
    private $wynik;

    public function __construct() {
        $this->wynik = 0;
    }

    public function getWynik() {
        return $this->wynik;
    }

    public function dodaj($liczba) {
        $this->wynik += $liczba;
    }

    public function odejmij($liczba) {
        $this->wynik -= $liczba;
    }
}

$kalkulator = new Kalkulator();

$kalkulator->dodaj(5);
echo "Wynik po dodaniu 5: " . $kalkulator->getWynik() . "\n";

$kalkulator->odejmij(3);
echo "Wynik po odjęciu 3: " . $kalkulator->getWynik() . "\n";



class KoszykZakupowy {
    private $przedmioty;
    private $suma;

    public function __construct() {
        $this->przedmioty = [];
        $this->suma = 0;
    }

    public function dodajPrzedmiot($nazwa, $cena) {
        $this->przedmioty[] = ['nazwa' => $nazwa, 'cena' => $cena];
        $this->suma += $cena;
    }

    public function pobierzPrzedmioty() {
        return $this->przedmioty;
    }

    public function pobierzSumę() {
        return $this->suma;
    }
}

$koszyk = new KoszykZakupowy();

$koszyk->dodajPrzedmiot("Laptop", 2500);
$koszyk->dodajPrzedmiot("Smartfon", 1200);
$koszyk->dodajPrzedmiot("Słuchawki", 150);

$przedmiotyWKoszyku = $koszyk->pobierzPrzedmioty();
$sumaZakupów = $koszyk->pobierzSumę();

echo "Przedmioty w koszyku:\n";
foreach ($przedmiotyWKoszyku as $przedmiot) {
    echo $przedmiot['nazwa'] . " - Cena: " . $przedmiot['cena'] . " zł\n";
}

echo "Całkowity koszt zakupów: " . $sumaZakupów . " zł\n";



class Logger {
    private static $instance;
    private $logs;

    private function __construct() {
        $this->logs = [];
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function logMessage($message) {
        $this->logs[] = $message;
    }

    public function getLogs() {
        return $this->logs;
    }
}

$logger1 = Logger::getInstance();
$logger1->logMessage("Log entry 1");

$logger2 = Logger::getInstance();
$logger2->logMessage("Log entry 2");

$logs = $logger1->getLogs();

echo "Logs:\n";
foreach ($logs as $log) {
    echo $log . "\n";
}



class Walidacja {
    public static function walidujEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function walidujHasło($hasło) {
        return strlen($hasło) >= 8;
    }

    public static function walidujImię($imię) {
        return ctype_alpha($imię);
    }
    
}

$email = "test@example.com";
$hasło = "password123";
$imię = "Mateusz";

if (Walidacja::walidujEmail($email)) {
    echo "Adres e-mail jest poprawny.\n";
} else {
    echo "Adres e-mail jest niepoprawny.\n";
}

if (Walidacja::walidujHasło($hasło)) {
    echo "Hasło jest poprawne.\n";
} else {
    echo "Hasło jest niepoprawne.\n";
}

if (Walidacja::walidujImię($imię)) {
    echo "Imię jest poprawne.\n";
} else {
    echo "Imię jest niepoprawne.\n";
}



class MyClass {
    public function __construct() {
        echo 'Klasa MyClass została zainicjowana!';
    }
}

$myObject = new MyClass();



class WelcomeMessage {
    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->displayWelcomeMessage();
    }

    private function displayWelcomeMessage() {
        echo "Witajcie wszyscy, jestem {$this->name}.\n";
    }
}

$welcome = new WelcomeMessage("Scott");



class SilniaCalculator {
    public static function obliczSilnię($liczba) {
        if ($liczba < 0) {
			 return "Silnia jest zdefiniowana tylko dla liczb nieujemnych.";
        } elseif ($liczba === 0 || $liczba === 1) {
			return 1;
			} else {
				return $liczba * self::obliczSilnię($liczba - 1);
        }
    }
}

$liczba = 5;
$wynik = SilniaCalculator::obliczSilnię($liczba);

echo "Silnia z $liczba wynosi: $wynik\n";



class SortowanieTablicy {
    private $tablica;

    public function __construct($tablica) {
        $this->tablica = $tablica;
    }

    public function sortujTablicę() {
        sort($this->tablica);
        return $this->tablica;
    }
}

$tablicaLiczb = array(11, -2, 4, 35, 0, 8, -9);

$sortowanie = new SortowanieTablicy($tablicaLiczb);
$posortowanaTablica = $sortowanie->sortujTablicę();

echo "Tablica przed sortowaniem:\n";
print_r($tablicaLiczb);

echo "\nTablica po sortowaniu:\n";
print_r($posortowanaTablica);



class RóżnicaDat {
    private $dataPoczątkowa;
    private $dataKońcowa;

    public function __construct($dataPoczątkowa, $dataKońcowa) {
        $this->dataPoczątkowa = new DateTime($dataPoczątkowa);
        $this->dataKońcowa = new DateTime($dataKońcowa);
    }

    public function obliczRóżnicę() {
        $różnica = $this->dataPoczątkowa->diff($this->dataKońcowa);

        return $różnica;
    }
}

$dataPoczątkowa = "1981-11-03";
$dataKońcowa = "2013-09-04";

$różnicaDat = new RóżnicaDat($dataPoczątkowa, $dataKońcowa);
$różnica = $różnicaDat->obliczRóżnicę();

echo "Różnica: " . $różnica->y . " lat, " . $różnica->m . " miesięcy, " . $różnica->d . " dni\n";



class Kalkulator {
    private $liczba1;
    private $liczba2;

    public function __construct($liczba1, $liczba2) {
        $this->liczba1 = $liczba1;
        $this->liczba2 = $liczba2;
    }

    public function dodaj() {
        return $this->liczba1 + $this->liczba2;
    }

    public function odejmij() {
        return $this->liczba1 - $this->liczba2;
    }

    public function pomnóż() {
        return $this->liczba1 * $this->liczba2;
    }

    public function podziel() {
        if ($this->liczba2 != 0) {
            return $this->liczba1 / $this->liczba2;
        } else {
            return "Nie można dzielić przez zero.";
        }
    }
}

$mycalc = new Kalkulator(15, 3);

echo "Dodawanie: " . $mycalc->dodaj() . "\n";
echo "Odejmowanie: " . $mycalc->odejmij() . "\n";
echo "Mnożenie: " . $mycalc->pomnóż() . "\n";
echo "Dzielenie: " . $mycalc->podziel() . "\n";

*/

$ciągZnaków = '12-08-2004';
$dataTimeObiekt = DateTime::createFromFormat('d-m-Y', $ciągZnaków);

if ($dataTimeObiekt !== false) {
    echo "Konwersja na DateTime: " . $dataTimeObiekt->format('Y-m-d') . "\n";
} else {
    echo "Błąd konwersji na DateTime.\n";
}

$dataObiekt = date_create_from_format('d-m-Y', $ciągZnaków);

if ($dataObiekt !== false) {
    echo "Konwersja na Date: " . date_format($dataObiekt, 'Y-m-d') . "\n";
} else {
    echo "Błąd konwersji na Date.\n";
}

?>
