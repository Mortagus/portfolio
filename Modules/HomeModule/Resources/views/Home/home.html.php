<div class="container-fluid">
    <header class="text-center">
        <h3>Bienvenu sur le Portail de Benjamin Lemin</h3>
    </header>
    <div id="lesVignettes">
        <div class="grid">
            <figure class="effect-ming" id="myself">
                <img src="<?php echo INT_GLB_RSC_URL . DS . 'img' . DS . 'ben-icon.png'; ?>" alt="img09">
                <figcaption>
                    <h2>My <span>Resume</span></h2>
                    <p>Come here and learn about myself.</p>
                    <a href="<?php echo $this->getUrl('presentation'); ?>">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-ming" id="projects">
                <img src="<?php echo INT_GLB_RSC_URL . DS . 'img' . DS . 'Computer-Hardware-Notebook-icon.png'; ?>" alt="img08">
                <figcaption>
                    <h2>My <span>Projects</span></h2>
                    <p>Come here and see by yourself what I'm capable of.</p>
                    <a href="<?php echo $this->getUrl('projectsIndex'); ?>">View more</a>
                </figcaption>
            </figure>
        </div>
    </div>
</div>