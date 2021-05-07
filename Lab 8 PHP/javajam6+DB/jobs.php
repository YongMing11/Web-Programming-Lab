<?php
include_once('header.php');
?>

<main>
    <div class="container-fluid p-5 bg-coffee">
        <h2>Jobs at JavaJam</h2>
        <p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are
            marked
            with an asterisk (*).</p>

        <form method="post" action="http://webdevbasics.net/scripts/javajam8.php" id="form" class="container">

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">*Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Ang Li Hang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">*E-mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="email@example.com" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="experience" class="col-sm-2 col-form-label">*Experience</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="experience" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="position" class="col-sm-2 col-form-label">Select job position:</label>
                <div class="col-sm-10">
                    <script>
                        var person = [{
                                code: "ba",
                                name: "Barista",
                                scope: 'Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality beverages.'
                            },
                            {
                                code: "ma",
                                name: "Manager",
                                scope: 'Managing day-to-day operations of the cafe.'
                            },
                            {
                                code: "tr",
                                name: "Trainee",
                                scope: 'Supporting daily operations of the cafe.'
                            },
                        ];
                        document.write(`<select id="jobPosition" class="form-select mb-2" aria-label="Default select example">
                                    ${person.map((person)=>
                                        `<option value=${person.code}>${person.name}</option>`
                                    )}
                                </select >`)

                        document.querySelector('#jobPosition').addEventListener('change', function(e) {
                            document.querySelector('#jobScope').textContent = person.filter((p) => p.code === e.currentTarget.value)[0].scope;
                        })
                    </script>
                    <p id="jobScope">Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality beverages.</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="dateTime" class="col-sm-2 col-form-label">Preferred Interview Date and Time:</label>
                <div class="col-sm-10">
                    <input id="dateTime" type="datetime-local">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="photo" class="col-sm-2 col-form-label">Upload your photo:</label>
                <div class="col-sm-10">
                    <input id="photo" type="file" class="form-control">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5">
                <button class="btn btn-dark" type="submit">Apply Now</button>
            </div>
        </form>
    </div>
</main>

<?php
include_once('footer.php');
?>