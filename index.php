<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require __DIR__ . '/vendor/autoload.php';

// utilisation du namespace pour faire le liens avec les autres fichiers et supprimer la majorité des require
use SchoolProject\Teacher;

//new teacher created
$teacher_1= new Teacher ('Henry', 'Raoul', 'Vannes', 'Philosophie');
$teacher_2= new Teacher ('Maddy', 'Nathalie', ' Questembert', 'Histoire-Géographie');
$teacher_3= new Teacher ('Raven', 'Henry', ' Lorient', 'professeur des écoles');
$teacher_4= new Teacher ('Queré', 'Pierre', ' Vannes', 'Musique');

// teacher's table
$teacherTab= array();
$teacherTab[]= $teacher_1;
$teacherTab[]= $teacher_2;
$teacherTab[]= $teacher_3;
$teacherTab[]= $teacher_4;

// loop to have the personal data of each teacher
foreach ($teacherTab as $teacher) {
    echo $teacher->getPersonalData() . "</br></br>";
}

// actual size of the teacher
teacher::getSize();
?></br>
</br>

<?php

use SchoolProject\Student;

//new student created
$student_1 = new Student('MCdaniel', 'Margaux ', 'Vannes ', 'CM2' );
$student_2 = new Student('Renaud', 'Baptiste', 'Vannes', 'CE1');

// teacher's table
$studentTab= array();
$studentTab[]= $student_1;
$studentTab[]= $student_2;

//loop to have the personal data of each student
foreach ($studentTab as $student) {
    echo $student->getPersonalData() . "</br></br>";
}
// actual size of the student
Student::getSize();

?>

</body>
</html>