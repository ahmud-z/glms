<?php

include 'classes/Database.php';
include 'include/functions.php';

$db = new Database();

$teachers = [
    ['name' => 'Teacher', 'email' => 'teacher@green.edu.bd', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Amitabh Banerjee', 'email' => 'amitabh.banerjee@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Soma Dasgupta', 'email' => 'soma.dasgupta@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Partha Chakraborty', 'email' => 'partha.chakraborty@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Rina Ghosh', 'email' => 'rina.ghosh@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Debashis Mukherjee', 'email' => 'debashis.mukherjee@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Kabita Sen', 'email' => 'kabita.sen@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Anindya Chatterjee', 'email' => 'anindya.chatterjee@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Tanima Sarkar', 'email' => 'tanima.sarkar@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Subrata Roy', 'email' => 'subrata.roy@example.com', 'password' => 'password', 'type' => 'teacher'],
    ['name' => 'Kajal Mitra', 'email' => 'kajal.mitra@example.com', 'password' => 'password', 'type' => 'teacher'],
];

$classes = [
    ['name' => 'Bengali 101', 'section' => 'A', 'subject' => 'Bengali', 'room' => 'Room 201'],
    ['name' => 'History 101', 'section' => 'B', 'subject' => 'History', 'room' => 'Room 202'],
    ['name' => 'Physics 101', 'section' => 'A', 'subject' => 'Physics', 'room' => 'Room 203'],
    ['name' => 'Chemistry 101', 'section' => 'A', 'subject' => 'Chemistry', 'room' => 'Room 204'],
    ['name' => 'Biology 101', 'section' => 'B', 'subject' => 'Biology', 'room' => 'Room 205'],
    ['name' => 'Mathematics 102', 'section' => 'B', 'subject' => 'Mathematics', 'room' => 'Room 206'],
    ['name' => 'English 102', 'section' => 'A', 'subject' => 'English', 'room' => 'Room 207'],
    ['name' => 'Science 302', 'section' => 'B', 'subject' => 'Science', 'room' => 'Room 208'],
    ['name' => 'Geography 101', 'section' => 'A', 'subject' => 'Geography', 'room' => 'Room 209'],
    ['name' => 'Economics 101', 'section' => 'A', 'subject' => 'Economics', 'room' => 'Room 210'],
    ['name' => 'Computer Science 101', 'section' => 'B', 'subject' => 'Computer Science', 'room' => 'Room 211'],
    ['name' => 'Art 101', 'section' => 'A', 'subject' => 'Art', 'room' => 'Room 212'],
    ['name' => 'Music 101', 'section' => 'B', 'subject' => 'Music', 'room' => 'Room 213'],
    ['name' => 'Philosophy 101', 'section' => 'A', 'subject' => 'Philosophy', 'room' => 'Room 214'],
    ['name' => 'Psychology 101', 'section' => 'B', 'subject' => 'Psychology', 'room' => 'Room 215'],
    ['name' => 'Sociology 101', 'section' => 'A', 'subject' => 'Sociology', 'room' => 'Room 216'],
    ['name' => 'Political Science 101', 'section' => 'B', 'subject' => 'Political Science', 'room' => 'Room 217'],
    ['name' => 'Law 101', 'section' => 'A', 'subject' => 'Law', 'room' => 'Room 218'],
    ['name' => 'Statistics 101', 'section' => 'B', 'subject' => 'Statistics', 'room' => 'Room 219'],
    ['name' => 'Anthropology 101', 'section' => 'A', 'subject' => 'Anthropology', 'room' => 'Room 220'],
    ['name' => 'Literature 101', 'section' => 'B', 'subject' => 'Literature', 'room' => 'Room 221'],
    ['name' => 'Linguistics 101', 'section' => 'A', 'subject' => 'Linguistics', 'room' => 'Room 222'],
    ['name' => 'Environmental Science 101', 'section' => 'B', 'subject' => 'Environmental Science', 'room' => 'Room 223'],
    ['name' => 'Astronomy 101', 'section' => 'A', 'subject' => 'Astronomy', 'room' => 'Room 224'],
    ['name' => 'Physical Education 101', 'section' => 'B', 'subject' => 'Physical Education', 'room' => 'Room 225'],
    ['name' => 'Media Studies 101', 'section' => 'A', 'subject' => 'Media Studies', 'room' => 'Room 226'],
    ['name' => 'Theatre 101', 'section' => 'B', 'subject' => 'Theatre', 'room' => 'Room 227'],
    ['name' => 'Foreign Languages 101', 'section' => 'A', 'subject' => 'Foreign Languages', 'room' => 'Room 228'],
    ['name' => 'Business Studies 101', 'section' => 'B', 'subject' => 'Business Studies', 'room' => 'Room 229'],
    ['name' => 'Nursing 101', 'section' => 'A', 'subject' => 'Nursing', 'room' => 'Room 230'],
    ['name' => 'Architecture 101', 'section' => 'B', 'subject' => 'Architecture', 'room' => 'Room 231'],
];


// Insert teachers into the users table
foreach ($teachers as $teacher) {
    $stmt = $db->query("INSERT INTO users (name, email, password, type) VALUES (?, ?, ?, ?)", [
        $teacher['name'],
        $teacher['email'],
        md5($teacher['password']),
        $teacher['type']
    ]);
}

// Retrieve all teacher IDs
$teacherStmt = $db->query("SELECT id FROM users WHERE type = 'teacher'");
$teacherIds = $teacherStmt->fetchAll(PDO::FETCH_COLUMN);

// Assign each class a teacher ID
foreach ($classes as $index => $class) {
    $teacherId = $teacherIds[$index % count($teacherIds)];
    $stmt = $db->query("INSERT INTO classes (teacher_id, code, name, section, subject, room) VALUES (?, ?, ?, ?, ?, ?)", [
        $teacherId,
        generateUniqueCode(),
        $class['name'],
        $class['section'],
        $class['subject'],
        $class['room']
    ]);
}

echo "Seeding completed successfully.";
