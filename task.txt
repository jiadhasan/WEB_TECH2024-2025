<!DOCTYPE html>
<html>
<head>
  <title>Student Profile and Status Checker</title>
</head>
<body>

  <h2>Student Profile Checker</h2>
  <button onclick="showResult()">Check Student Result</button>

  <script>
   
    var studentName = "Jiad Hasan";
    var studentAge = 23;
    var software = 85;
    var ai = 78;
    var algo = 92;
    var webtech = 69;
    var compiler = 88;

    
    var totalMarks = software + ai + algo + webtech + compiler;
    var subjectCount = 5;
    var averageMarks = totalMarks / subjectCount;

    
    var isAdult = false;
    if (studentAge >= 18) {
      isAdult = true;
    }

    var isPassed = false;
    if (averageMarks >= 50) {
      isPassed = true;
    }

    
    var subjects = ["software ","ai" ,"algo","webtech","compiler"];
    var marks = [software , ai , algo , webtech , compiler];

    console.log("Marks in each subject:");
    for (var i = 0; i < subjects.length; i++) {
      console.log(subjects[i] + ": " + marks[i]);
    }

 
    function showResult() {
      var summary = "Student Summary:\n";
      summary += "Name: " + studentName + "\n";
      summary += "Age: " + studentAge + "\n";
      summary += "Adult: " + (isAdult ? "Yes" : "No") + "\n";
      summary += "Passed: " + (isPassed ? "Yes" : "No") + "\n";
      summary += "Total Marks: " + totalMarks + "\n";
      summary += "Average Marks: " + averageMarks.toFixed(2) + "\n";
      summary += "Subject-wise Marks:\n";

      for (var i = 0; i < subjects.length; i++) {
        summary += subjects[i] + ": " + marks[i] + "\n";
      }


      alert(summary);
    }
  </script>

</body>
</html>
