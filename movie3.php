<!DOCTYPE html>
<html lang="en">

<?php require './includes/header.php'; ?>

<body>

    <div class="container">
        <?php require './includes/nav-bar.php'; ?>

        <div class="container py-3">
            <div class="row">
                <div class="col-lg-3 col-md-3">

                    <img class="img-fluid"
                        src="https://wallpaper.forfun.com/fetch/8d/8dabb586f918bad6a52d3811e4f35b56.jpeg?h=900&r=0.5">
                </div>

                <div class="col-lg-9 col-md-9">
                    <h1>Interstellar</h1>

                    <div>
                        <div><strong>Runtime: </strong>
                            <?php echo runtimePrettier(169); ?>
                        </div>
                        <div><strong> Release Date: </strong>
                            <?php echo check_old_movie(1994) ?>
                        </div>
                        <div><strong>Genre: </strong>
                            <div class="badge bg-primary"> Adventure Epic</div>
                            <div class="badge bg-primary"> Quest</div>
                            <div class="badge bg-primary"> Sci-Fi Epic</div>
                            <div class="badge bg-primary"> Space Sc-Fi</div>
                            <div class="badge bg-primary"> Adventure</div>
                            <div class="badge bg-primary"> Drama</div>
                            <div class="badge bg-primary"> Sci-Fi</div>
                        </div>


                        <div class="embed-responsive py-3">
                            <h6>Official movie trailer</h6>
                            <iframe width="auto" height="auto" src="https://www.youtube.com/embed/zSWdZVtXT7E"
                                title="Interstellar - Trailer - Official Warner Bros. UK" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div>
                            <p> <span class="fw-bold">Interstellar</span> is a breathtaking and ambitious cinematic journey that explores
                                the depths of space, time, and the human spirit.
                                Directed by Christopher Nolan, the film blends science fiction with profound emotional depth, creating a
                                narrative that is as intellectually stimulating as it is emotionally resonant. Set in a near-future Earth ravaged by
                                environmental collapse, the story follows Cooper, a former NASA pilot turned farmer, who embarks on a perilous mission
                                to find a new habitable planet for humanity.</p>

                            <p>Matthew McConaughey delivers a powerful performance as Cooper, a man torn between his duty to save humanity and his love
                                for his family. His portrayal captures the internal conflict and sacrifice of a father who must leave his children
                                behind to venture into the unknown. Anne Hathaway, as Dr. Amelia Brand, provides a strong counterpart, offering both
                                scientific expertise and emotional vulnerability in her quest to fulfill her father's legacy.</p>

                            <p>The film's narrative is rich with complex scientific concepts, including black holes, wormholes, and the theory of
                                relativity, all of which are presented with meticulous attention to detail. Nolan's collaboration with renowned
                                physicist Kip Thorne ensures that the science underpinning the story is both credible and awe-inspiring, making the film
                                a fascinating exploration of the possibilities and mysteries of the universe.</p>

                            <p> Visually, Interstellar is a stunning achievement. Hoyte van Hoytema's cinematography captures the vastness and
                                beauty of space, while Hans Zimmer's evocative score amplifies the emotional intensity of the journey. The sequences set
                                in the black hole, Gargantua, are particularly mesmerizing, showcasing the film's groundbreaking visual effects and
                                innovative storytelling.</p>

                            <p>Beyond its scientific and visual splendor, Interstellar is ultimately a story about love, sacrifice, and the
                                enduring connections that bind us across time and space. It poses profound questions about humanity's place in the
                                cosmos and the lengths to which we will go to ensure our survival. The film's exploration of love as a transcendent
                                force that can cross dimensions and influence the fate of the universe adds a deeply human element to its grand cosmic
                                scale.</p>

                            <p>Interstellar is a cinematic experience that challenges the mind and touches the heart, making it a modern sci-fi
                                classic that continues to inspire and provoke thought long after the final frame. Its blend of science, emotion, and
                                epic storytelling cements its place as one of the most remarkable films of the 21st century.<< /p>
                        </div>

                    </div>
                </div>
            </div>

        </div>





        <?php require './includes/footer.php'; ?>
</body>

</html>