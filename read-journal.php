<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Journal</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        * { margin: 0; padding: 0; font-family: 'Poppins', sans-serif; }
        body { background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop'); background-size: cover; }
        .main { display: flex; justify-content: center; align-items: center; height: 100vh; }
        .read-journal-container { background-color: rgba(250, 250, 250, 0.8); padding: 50px; border-radius: 20px; width: 1200px; height: 750px; position: relative; overflow: auto; }
        .journals { display: flex; flex-wrap: wrap; }
        .card { margin: 10px; color: #fff; border: none; background-color: rgba(50, 50, 50, 0.6); }
        .modal-content { margin-top: 40%; }
    </style>

</head>
<body>

<div class="main">
    <div class="read-journal-container">
        <h1>Read your memorable travels.</h1>

        <!-- Search Bar -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Search by location or date" onkeyup="searchJournals()">
        </div>

        <div class="journals" id="journalsContainer">
            <?php 
                include('./conn/conn.php');
                $stmt = $conn->prepare("SELECT * FROM tbl_journal");
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach($result as $row) {
                    $journalID = $row['tbl_journal_id'];
                    $image = $row['image'];
                    $date = $row['date'];
                    $moments = $row['moments'];
                    $location = $row['location'];
            ?>

            <div class="card journal-card" data-location="<?= htmlspecialchars($location) ?>" data-date="<?= htmlspecialchars($date) ?>" style="width: 15rem;">
                <img src="images/<?= htmlspecialchars($image) ?>" class="card-img-top" alt="Image" style="height:150px;">
                <div class="card-body">
                    <h5 class="card-title" id="location-<?= $journalID ?>"><?= htmlspecialchars($location) ?></h5>
                    <small id="date-<?= $journalID ?>"><?= htmlspecialchars($date) ?></small>
                    <small hidden id="moments-<?= $journalID ?>"><?= htmlspecialchars($moments) ?></small>
                </div>
                <div class="card-footer">
                    <button class="btn btn-dark float-right" onclick="viewMore(<?=  $journalID ?>)">View More</button>
                </div>
            </div>

            <?php } ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="viewMoreModal" tabindex="-1" aria-labelledby="journalTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="journalTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="journalMoment"></p>
                    </div>
                    <div class="modal-footer">
                        <small class="mr-auto">Date: <span id="journalDate"></span></small>
                        <button type="button" class="btn btn-danger" id="deleteButton">Delete Journal</button>
                        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary back-button" onclick="redirectTo('index.php')">Back to Home</button>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script>
    function redirectTo(page) {
        window.location.href = page;
    }

    function viewMore(id) {
        $("#viewMoreModal").modal("show");

        let journalTitle = $("#location-" + id).text();
        let journalMoment = $("#moments-" + id).text();
        let journalDate = $("#date-" + id).text();

        $("#journalTitle").text(journalTitle);
        $("#journalMoment").text(journalMoment);
        $("#journalDate").text(journalDate);

        // Set the click event for the delete button
        $("#deleteButton").off('click').on('click', function() {
            deleteJournal(id);
        });
    }

    function searchJournals() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const journals = document.getElementsByClassName('journal-card');

        Array.from(journals).forEach(journal => {
            const location = journal.getAttribute('data-location').toLowerCase();
            const date = journal.getAttribute('data-date').toLowerCase();

            if (location.includes(filter) || date.includes(filter)) {
                journal.style.display = ''; // Show journal
            } else {
                journal.style.display = 'none'; // Hide journal
            }
        });
    }

    function deleteJournal(id) {
        if (confirm('Are you sure you want to delete this journal?')) {
            // Make a DELETE request to your server to delete the journal entry
            fetch(`delete_journal.php`, {
                method: 'DELETE',
                body: new URLSearchParams({ id: id }) // Pass the ID in the body
            })
            .then(response => {
                if (response.ok) {
                    alert('Journal deleted successfully.');
                    // Remove the journal card from the UI
                    $(`.card:has(.card-title:contains('${$("#journalTitle").text()}'))`).remove();
                    $("#viewMoreModal").modal("hide");
                } else {
                    alert('Error deleting journal.');
                }
            });
        }
    }
</script>

</body>
</html>
