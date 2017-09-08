<!--
@author Heggen, Jonathan
A00840322
Sept 7 2017
-->

<html>
<head>
    <meta charset="utf-8">
    <title>Heggen, J - A00840322</title>
</head>
<body>
    <?php
    include('Student.php');

    //create student array
    $students = array();
    
    //add student 1
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;
    
    //add student 2
    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home','albert@braniacs.com');
    $second->add_email('work1','a_einstein@bcit.ca');
    $second->add_email('work2','albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $students['a456'] = $second;
    
    //add self
    $third = new Student();
    $third->surname = "Heggen";
    $third->first_name = "Jonathan";
    $third->add_email('home','jonathan.heggen@gmail.com');
    $third->add_email('work1','jheggen@my.bcit.ca');
    $third->add_grade(100);
    $third->add_grade(90);
    $third->add_grade(80);
    $students['a567'] = $third;
    

    
    // sort students
    ksort($students);
    
    //echo students
    foreach($students as $student)
        echo $student->toString();

?>
</body>
</html>