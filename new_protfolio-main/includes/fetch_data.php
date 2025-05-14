<?php
require_once '../config/db.php';

// Fetch skills from database
function getSkills() {
    global $conn;
    $skills = [];
    $sql = "SELECT * FROM skills";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $skills[] = $row;
        }
    }
    
    return $skills;
}

// Fetch projects from database
function getProjects() {
    global $conn;
    $projects = [];
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }
    
    return $projects;
}

// Handle AJAX requests
if (isset($_GET['action'])) {
    header('Content-Type: application/json');
    
    switch ($_GET['action']) {
        case 'get_skills':
            echo json_encode(getSkills());
            break;
            
        case 'get_projects':
            echo json_encode(getProjects());
            break;
            
        default:
            echo json_encode(['error' => 'Invalid action']);
    }
    
    exit;
}
?>
