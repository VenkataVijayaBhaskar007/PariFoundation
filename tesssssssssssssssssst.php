<script src="https://cdn.tailwindcss.com"></script>



<section>
  <div class="container  ">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="session-title">
                <h2 class="text-3xl antialiased font-bold leading-snug tracking-normal text-emerald-900 pt-4 pb-3">Our Organizational Narrative</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="event-ro row mx-auto"> <!-- Added mx-auto class here -->
            <?php
            include 'admin/inc/db.php';
            $sql = "Select * from whatwe order by id desc";

            foreach ($dbh->query($sql) as $row) {
                echo("
                    <div class='relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96 mb-6 mx-auto'> <!-- Added mx-auto class here -->
                        <div class='relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40'>
                            <img src='slide/$row[2]' alt='card-image' class='object-cover w-full h-full' />
                        </div>
                        <div class='p-6'>
                            <h5 class='block mb-2 text-center font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900'>
                                $row[1]
                            </h5>
                            <p class='block font-sans text-center text-base antialiased font-light leading-relaxed text-inherit'>
                                $row[3]
                            </p>
                        </div>
                        <div class='p-6 pt-0'>
                            <button
                                class='block w-full select-none rounded-lg bg-emerald-900 py-3.5 px-7 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none'
                                type='button'>
                                Donate Now
                            </button>
                        </div>
                    </div>
                    <div class='w-2'></div>
                ");
            }
            ?>
        </div>
    </div>
</div>

  </div>
</section>