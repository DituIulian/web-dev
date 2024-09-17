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
                        src="https://wallpaper.forfun.com/fetch/52/5258df3d89839da339cbd339ae8514c2.jpeg?h=900&r=0.5">
                </div>

                <div class="col-lg-9 col-md-9">
                    <h1>John Wick</h1>

                    <div>
                        <div><strong>Runtime: </strong>
                            <?php
                            echo runtimePrettier(101);
                            ?>

                            <div><strong>Genre: </strong>
                                <div class="badge bg-primary text-wrap"> Gun Fu</div>
                                <div class="badge bg-primary text-wrap"> One-Person Army Action</div>
                                <div class="badge bg-primary text-wrap"> Action</div>
                                <div class="badge bg-primary text-wrap"> Crime</div>
                                <div class="badge bg-primary text-wrap"> Thriler</div>
                            </div>


                            <div class="embed-responsive py-3">
                                <h6>Official movie trailer</h6>
                                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/C0BMx-qxsP4"
                                    title="John Wick Official Trailer #1 (2014) - Keanu Reeves, Willem Dafoe Movie HD" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div>
                                <p> <span class="fw-bold">John Wick</span> is a high-octane action thriller that redefined the genre with its sleek style, relentless pace,
                                    and a
                                    story that resonates with raw emotion and visceral intensity. Directed by Chad Stahelski, the film marks a powerful
                                    return to form for Keanu Reeves, who delivers a commanding performance as the titular character—a retired hitman drawn
                                    back into the criminal underworld by a personal tragedy.</p>

                                <p>The plot begins with the heartbreaking death of John's wife, followed by the senseless killing of the puppy she left him
                                    as a final gift. This seemingly simple act of violence ignites a firestorm of vengeance, as Wick unleashes his
                                    unparalleled skills to hunt down those responsible. The film's narrative, though straightforward, is elevated by its
                                    world-building, introducing viewers to a meticulously crafted underworld governed by its own rules, codes, and a
                                    secretive network of assassins.</p>

                                <p>What sets John Wick apart is its choreography and visual storytelling. The action sequences are nothing short of
                                    spectacular, blending gunplay with martial arts in what has come to be known as "gun-fu." Stahelski, a former stunt
                                    coordinator, brings a level of authenticity and precision to the fight scenes that is rarely seen in Hollywood. Each
                                    encounter is a ballet of bullets and brutality, choreographed with a fluidity that keeps viewers on the edge of their
                                    seats.</p>

                                <p> The film's aesthetic is equally striking, with a neo-noir visual style that combines moody lighting, sleek set designs,
                                    and a pulsating electronic score by Tyler Bates and Joel J. Richard. This creates a unique atmosphere that is both
                                    stylish and immersive, pulling audiences into the dark, glamorous world of John Wick.</p>

                                <p>Reeves embodies Wick with a perfect blend of stoicism and vulnerability, making him a compelling and sympathetic
                                    anti-hero. His character, though a ruthless killer, is driven by a sense of loss and a desire for justice that gives the
                                    film an emotional core. The supporting cast, including Michael Nyqvist as the antagonist Viggo Tarasov and Willem Dafoe
                                    as fellow assassin Marcus, adds depth and intrigue to the story.</p>

                                <p>John Wick is more than just an action movie—it's a masterclass in genre filmmaking. With its innovative action
                                    choreography, distinctive style, and a story that strikes a chord with audiences, the film has not only spawned a
                                    successful franchise but also influenced the action genre as a whole. It's a relentless, exhilarating ride that has
                                    solidified John Wick as an iconic character in modern cinema.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>





            <?php require './includes/footer.php'; ?>
</body>

</html>