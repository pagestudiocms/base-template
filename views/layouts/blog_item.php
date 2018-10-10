{{ template:partial name="header" }}

    <!-- cms content injection point -->
    <main class="content-container" id="main-content" data-content-field="main-content" role="main">

        <article id="post-{{ entry_id }}" class="blog-article" data-item-id="{id}">
            <header style="background: url({{ featured_image }}) center no-repeat;" data-content-field="featured-image">
                <h1 class="article-header-text" data-content-field="title">{{ title }}</h1>
                <span class="post-meta"><time datetime="{{ created_date }}">{{ created_date format="F dS, Y" }}</time> by {{ author }}</span>
            </header>
            
            <div class="row">
                <div class="container">
                    <div class="col-md-8">
                        {{ content }}
                    </div>
                </div>
            </div>
            
            <footer>
                <!-- meta data -->
            </footer>
        </article>
        <div class="share-links"></div>
        <div class="recommended"></div>

    </main>
    
{{ template:partial name="footer" }}
