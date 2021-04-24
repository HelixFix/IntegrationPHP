<div class="container">

    <div class="bg-image">

    </div>

    <form method="post" action="">

        <!-- Default radio -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1"> Froid </label>
        </div>

        <!-- Default checked radio -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
            <label class="form-check-label" for="flexRadioDefault2"> Chaud </label>
        </div>
        <br>
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Recherche</label>
            </div>
            <button type="submit" name="subrche" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>

    </form>

    <div class="tabs">
        <div class="tab-header">
            <div class="active">
                <i class="fa fa-code"></i> Code
            </div>
            <div>
                <i class="fa fa-pen-square"></i> About
            </div>
            <div>
                <i class="fa fa-bar-chart"></i> Services
            </div>
            <div>
                <i class="fa fa-envelope"></i> Contact
            </div>
        </div>
        <div class="tab-indicator"></div>
        <div class="tab-body">
            <div class="active">
                <h2>This is code section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error neque saepe commodi blanditiis fugiat
                    nisi aliquam ratione porro quibusdam in, eveniet accusantium cumque. Dolore officia reprehenderit
                    perferendis quod libero omnis.</p>
            </div>
            <div>
                <h2>This is about section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem
                    fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt
                    quaerat ut ducimus?</p>
            </div>
            <div>
                <h2>This is services section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem
                    fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt
                    quaerat ut ducimus?</p>
            </div>
            <div>
                <h2>This is contact section</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem
                    fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt
                    quaerat ut ducimus?</p>
            </div>
        </div>
    </div>
    <script>
        let tabHeader = document.getElementsByClassName("tab-header")[0];
        let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
        let tabBody = document.getElementsByClassName("tab-body")[0];

        let tabsPane = tabHeader.getElementsByTagName("div");

        for (let i = 0; i < tabsPane.length; i++) {
            tabsPane[i].addEventListener("click", function() {
                tabHeader.getElementsByClassName("active")[0].classList.remove("active");
                tabsPane[i].classList.add("active");
                tabBody.getElementsByClassName("active")[0].classList.remove("active");
                tabBody.getElementsByTagName("div")[i].classList.add("active");

                tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
            });
        }
    </script>

</div>