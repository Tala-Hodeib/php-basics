<?php
$course_name = 'Laravel';
$enrolled_students = '50';
$course_price = '19.98';
$on_discount = true;
echo "Course title: $course_name \nEnrolled Students: $enrolled_students \nCourse price:" .$course_price. "USD$ \nCourse on discount: ";
if ( $on_discount == true )
echo 'Yes';
else
echo 'No';
?>