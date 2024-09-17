<!DOCTYPE html>
<html lang="en">

<?php require './includes/header.php'; ?>

<body>
    <div class="container">
        <?php require './includes/nav-bar.php';
        ?>

        <div class="container py-3">
            <div class="row">
                <div class="col-lg-3 col-md-3">

                    <img class="img-fluid"
                        src="https://wallpaper.forfun.com/fetch/eb/eb3f99cde304c6094e7471404f6585d1.jpeg?h=900&r=0.5">
                </div>

                <div class="col-lg-9 col-md-9">
                    <h1>Shawshank Redemption</h1>

                    <div>
                        <div><strong>Runtime: </strong>
                            <?php echo runtimePrettier(142); ?>
                        </div>
                        <div><strong>Genre: </strong>
                            <div class="badge bg-primary text-wrap"> Epic</div>
                            <div class="badge bg-primary text-wrap"> Period Drama</div>
                            <div class="badge bg-primary text-wrap"> Prison</div>
                            <div class="badge bg-primary text-wrap"> Drama</div>
                            <div class="badge bg-primary text-wrap"> Tragedy</div>
                            <div class="badge bg-primary text-wrap"> Drama</div>
                        </div>


                        <div class="embed-responsive py-3">
                            <h6>Official movie trailer</h6>
                            <iframe width="auto" height="auto" src="https://www.youtube.com/embed/NmzuHjWmXOc"
                                title="The Shawshank Redemption (1994) Official Trailer #1 - Morgan Freeman Movie HD" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div>
                            <p> <span class="fw-bold">Shawshank Redemption </span> is a masterful cinematic exploration of hope, friendship, and resilience set
                                against the
                                bleak backdrop of a maximum-security prison. Directed by Frank Darabont and based on Stephen King's novella "Rita
                                Hayworth and Shawshank Redemption," the film tells the story of Andy Dufresne, a banker wrongly convicted of double
                                murder, and his struggle to maintain his dignity and hope over nearly two decades of incarceration.</p>

                            <p> At its core, the film is a study of the human spirit's indomitable will to survive in the face of overwhelming
                                despair.
                                Tim Robbins delivers a subtle yet powerful performance as Andy, whose quiet determination and intelligence enable
                                him to
                                navigate the brutalities of prison life. Morgan Freeman's portrayal of Red, a seasoned inmate and Andy's closest
                                friend,
                                is equally compelling, providing a voice of wisdom and pragmatism that contrasts with Andy's enduring hope.</p>

                            <p>The Shawshank Redemption's narrative is rich with symbolism and themes that resonate deeply with audiences. The
                                oppressive walls of Shawshank Prison represent the barriers of hopelessness and despair that Andy and the other
                                inmates
                                must confront. Yet, through small acts of defiance and moments of humanity, Andy chips away at these walls, both
                                literally and figuratively, as he plans his escape.</p>

                            <p> The film's cinematography and score further enhance its emotional impact, with Roger Deakins' hauntingly beautiful
                                visuals and Thomas Newman's evocative music creating a poignant atmosphere that lingers long after the credits roll.</p>

                            <p>Ultimately, The Shawshank Redemption is a story about the triumph of hope over despair, the enduring power of
                                friendship, and the belief that, even in the darkest of places, "hope is a good thing, maybe the best of things, and
                                no
                                good thing ever dies." Its universal themes and unforgettable characters have cemented its status as one of the most
                                beloved and enduring films in cinematic history.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>





        <?php require './includes/footer.php'; ?>
</body>

</html>