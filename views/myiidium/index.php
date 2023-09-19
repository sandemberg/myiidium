<section>
    <form action="" method="get">
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <label class="control-label" for="articlesearchform-term">Termo</label>
                    <input type="text" id="articlesearchform-term" class="form-control input-lg" name="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label" for="articlesearchform-category">Categoria</label>
                    <select id="articlesearchform-category" class="form-control input-lg" name="">
                        <option value="">:: TODOS ::</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group" style="padding-top: 25px">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="glyphicon glyphicon-search"></i> Buscar
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>

<hr />

<section>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <div class="col-md-6">
            <article class="articles">
                <h2 class="category">PHP</h2>
                <h1 class="title"><a href="">Node.js Docker workflow</a></h1>
                <h3 class="subtitle">I’ve been using Docker for approximately a year now, and after some time getting
                    used to I am now a huge fan of how it can improve the…</h3>

                <ul>
                    <li class="author"><i class="glyphicon glyphicon-user"></i> Guillaume Jacquart</li>
                    <li class="date"><i class="glyphicon glyphicon-calendar"></i> 12/12/2019</li>
                    <li class="likes"><i class="glyphicon glyphicon-thumbs-up"></i> 0 like(s)</li>
                </ul>
            </article>
        </div>
    <?php endfor; ?>
</section>