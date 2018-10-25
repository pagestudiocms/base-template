{{ theme:partial name="header" }}

    <!-- cms content injection point -->
    <main class="content-container" id="main-content" data-content-field="main-content" role="main">
        <section>
            <article>
                <header class="">
                    <h1 class="article-header-text">{{ title }}</h1>
                    <span class="post-meta"><time datetime="{{ created_date }}">{{ created_date format="F dS, Y" }}</time> by {{ author }}</span>
                </header>
                
                <div class="content-excerpt">
                    {{ content }}
                </div>
                
                <footer>
                    <!-- meta data -->
                </footer>
            </article>
            <div class="share-links"></div>
            <div class="recommended"></div>
        </section>
    </main>
    
{{ theme:partial name="footer" }}
