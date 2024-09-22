<?php
include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style996.css">
	<title>Exam Database</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-graduation' ></i>
			<span class="text">PotatoGraduate</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-square-dots'></i>
					<span class="text">Inner Join</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-ghost' ></i>
					<span class="text">Outer Join</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-cylinder' ></i>
					<span class="text">Left Join</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Potato Database Examination</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="main">
			<div class="head-title">
				<div class="left">
					<h1>Normalized Tables</h1>
				</div>
			</div>

			<!-- Students -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Students Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>StudentID</th>
								<th>FirstName</th>
								<th>LastName</th>
								<th>DOB</th>
								<th>Address</th>
								<th>Phone</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the Students table
							$sql = "SELECT * FROM Students";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['StudentID'] . "</td>";
									echo "<td>" . $row['FirstName'] . "</td>";
									echo "<td>" . $row['LastName'] . "</td>";
									echo "<td>" . $row['DOB'] . "</td>";
									echo "<td>" . $row['Address'] . "</td>";
									echo "<td>" . $row['Phone'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='6'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- Rooms -->
				<div class="order">
					<div class="head">
						<h3>Rooms Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>RoomID</th>
								<th>RoomName</th>
								<th>Building</th>
								<th>Capacity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the Rooms table
							$sql = "SELECT * FROM Rooms";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['RoomID'] . "</td>";
									echo "<td>" . $row['RoomNumber'] . "</td>";
									echo "<td>" . $row['Building'] . "</td>";
									echo "<td>" . $row['Capacity'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='4'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- Instructors -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Instructors Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>InstructorID</th>
								<th>InstructorName</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the Instructors table
							$sql = "SELECT * FROM Instructors";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['InstructorID'] . "</td>";
									echo "<td>" . $row['InstructorName'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='2'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- Schools -->					
				<div class="order">
					<div class="head">
						<h3>Schools Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>SchoolID</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the StudentEnrollment table
							$sql = "SELECT * FROM Schools";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['SchoolID'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='4'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>


				<!-- Courses -->
				<div class="order">
					<div class="head">
						<h3>Courses Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>CourseID</th>
								<th>CourseName</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the Courses table
							$sql = "SELECT * FROM Courses";
							$result = $conn->query($sql);
									
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['CourseID'] . "</td>";
									echo "<td>" . $row['CourseName'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='2'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- StudentCourses -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>StudentCourses Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>StudentID</th>
								<th>SchoolID</th>
								<th>CourseID</th>
								<th>InstructorID</th>
								<th>RoomID</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the StudentCourses table
							$sql = "SELECT * FROM StudentCourses";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['StudentID'] . "</td>";
									echo "<td>" . $row['SchoolID'] . "</td>";
									echo "<td>" . $row['CourseID'] . "</td>";
									echo "<td>" . $row['InstructorID'] . "</td>";
									echo "<td>" . $row['RoomID'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='5'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- StudentEnrollment -->
				<div class="order">
					<div class="head">
						<h3>StudentEnrollment Table</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>StudentID</th>
								<th>CourseID</th>
								<th>InstructorID</th>
								<th>EnrollmentDate</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							// Fetch data from the StudentEnrollment table
							$sql = "SELECT * FROM StudentEnrollment";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['StudentID'] . "</td>";
									echo "<td>" . $row['CourseID'] . "</td>";
									echo "<td>" . $row['InstructorID'] . "</td>";
									echo "<td>" . $row['EnrollmentDate'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='4'>No data found</td></tr>";
							}
							?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

		<!-- MAIN1 -->
		<main id="main1" style="display: none;">
			<div class="head-title">
				<div class="left">
					<h1>Inner Join Result Table</h1>
				</div>
			</div>
			<div class="table-data">
        		<div class="order">
        		    <div class="head">
        		        <h3>Students and Their Enrolled Courses</h3>
        		    </div>
        		    <table>
        		        <thead>
        		            <tr>
        		                <th>StudentID</th>
        		                <th>FirstName</th>
        		                <th>LastName</th>
        		                <th>CourseID</th>
        		                <th>CourseName</th>
        		            </tr>
        		        </thead>
        		        <tbody>
        		            <?php
        		            // Perform the inner join query
        		            $sql = "SELECT Students.StudentID, Students.FirstName, Students.LastName, Courses.CourseID, Courses.CourseName 
        		                    FROM Students
        		                    INNER JOIN StudentEnrollment ON Students.StudentID = StudentEnrollment.StudentID
        		                    INNER JOIN Courses ON StudentEnrollment.CourseID = Courses.CourseID";

        		            $result = $conn->query($sql);

        		            // Display the result in a table
        		            if ($result->num_rows > 0) {
        		                while($row = $result->fetch_assoc()) {
        		                    echo "<tr>";
        		                    echo "<td>" . $row['StudentID'] . "</td>";
        		                    echo "<td>" . $row['FirstName'] . "</td>";
        		                    echo "<td>" . $row['LastName'] . "</td>";
        		                    echo "<td>" . $row['CourseID'] . "</td>";
        		                    echo "<td>" . $row['CourseName'] . "</td>";
        		                    echo "</tr>";
        		                }
        		            } else {
        		                echo "<tr><td colspan='5'>No data found</td></tr>";
        		            }
        		            ?>
        		        </tbody>
        		    </table>
        		</div>
    		</div>
		</main>
	
		<!-- MAIN2 -->
		<main id="main2" style="display: none;">
			<div class="head-title">
				<div class="left">
					<h1>Outer Join Result Table</h1>
				</div>
			</div>
			<div class="table-data">
        <div class="order">
            <div class="head">
                <h3>All Courses (Including Courses without Students Enrolled)</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>CourseID</th>
                        <th>CourseName</th>
                        <th>StudentID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Perform the full outer join simulation using LEFT JOIN, RIGHT JOIN, and UNION
                    $sql = "(SELECT Courses.CourseID, Courses.CourseName, Students.StudentID, Students.FirstName, Students.LastName 
                            FROM Courses
                            LEFT JOIN StudentEnrollment ON Courses.CourseID = StudentEnrollment.CourseID
                            LEFT JOIN Students ON StudentEnrollment.StudentID = Students.StudentID)
                            UNION
                            (SELECT Courses.CourseID, Courses.CourseName, Students.StudentID, Students.FirstName, Students.LastName 
                            FROM Students
                            RIGHT JOIN StudentEnrollment ON Students.StudentID = StudentEnrollment.StudentID
                            RIGHT JOIN Courses ON StudentEnrollment.CourseID = Courses.CourseID)";
                    
                    $result = $conn->query($sql);
                    
                    // Display the result in a table
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . ($row['CourseID'] ? $row['CourseID'] : 'None') . "</td>";
                            echo "<td>" . ($row['CourseName'] ? $row['CourseName'] : 'None') . "</td>";
                            echo "<td>" . ($row['StudentID'] ? $row['StudentID'] : 'None') . "</td>";
                            echo "<td>" . ($row['FirstName'] ? $row['FirstName'] : 'N/A') . "</td>";
                            echo "<td>" . ($row['LastName'] ? $row['LastName'] : 'N/A') . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
		</main>
	
		<!-- MAIN3 -->
		<main id="main3" style="display: none;">
			<div class="head-title">
				<div class="left">
					<h1>Left Join Result Table</h1>
				</div>
			</div>
			<div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Students and their Enrolled Courses (Including Students without Enrollments)</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>StudentID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>CourseID</th>
                        <th>CourseName</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Use a LEFT JOIN to get all students, including those with no enrollments
                    $sql = "SELECT Students.StudentID, Students.FirstName, Students.LastName, Courses.CourseID, Courses.CourseName
                            FROM Students
                            LEFT JOIN StudentEnrollment ON Students.StudentID = StudentEnrollment.StudentID
                            LEFT JOIN Courses ON StudentEnrollment.CourseID = Courses.CourseID";

                    $result = $conn->query($sql);
                    
                    // Display the result in a table
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['StudentID'] . "</td>";
                            echo "<td>" . $row['FirstName'] . "</td>";
                            echo "<td>" . $row['LastName'] . "</td>";
                            // Check if CourseID and CourseName are null (student not enrolled in any course)
                            echo "<td>" . ($row['CourseID'] ? $row['CourseID'] : 'None') . "</td>";
                            echo "<td>" . ($row['CourseName'] ? $row['CourseName'] : 'None') . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
		</main>
	
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script>
		// Wait for the DOM to be fully loaded
		document.addEventListener("DOMContentLoaded", function() {
		  // Get all the sidebar links
		  const sideMenuLinks = document.querySelectorAll("#sidebar a");

		  // Get all the main sections
		  const mainSections = document.querySelectorAll("main");

		  // Function to hide all sections
		  function hideAllSections() {
			mainSections.forEach(section => {
			  section.style.display = "none";
			});
		  }

		  // Function to show the selected section
		  function showSection(sectionId) {
			hideAllSections();
			const sectionToShow = document.getElementById(sectionId);
			if (sectionToShow) {
			  sectionToShow.style.display = "block";
			}
		  }

		  // Attach click event listener to each side menu link
		  sideMenuLinks.forEach(link => {
			link.addEventListener("click", function(event) {
			  event.preventDefault(); // Prevent default link behavior

			  // Get the text from the <span> inside the link to determine which section to show
			  const menuText = this.querySelector(".text").textContent;

			  // Determine which section to show based on menu text
			  switch (menuText) {
				case "Dashboard":
				  showSection("main");
				  break;
				case "Inner Join":
				  showSection("main1");
				  break;
				case "Outer Join":
				  showSection("main2");
				  break;
				case "Left Join":
				  showSection("main3");
				  break;
				default:
				  showSection("main");
			  }
			});
		  });
		});
	</script>
	<?php
	$conn->close();
	?>
</body>
</html>