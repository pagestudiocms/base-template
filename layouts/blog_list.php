{{ theme:partial name="header" }}

<!-- cms content injection point -->
<main class="content-container" role="main" data-content-field="main-content">
    <div class="wrapper">
    
        {{ content }}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{content:entries content_type="blog_item" limit="1" paginate="botton" data-content-field="entries-loop"}}
                    <div class="post">
                        <div class="post-thumbnail"><a href="/{{ slug }}"><img src="https://placehold.it/800x400" alt="Blog-post Thumbnail"></a></div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="/{{ slug }}">{{ title }}</a></h2>
                                <div class="post-meta">By <a href="#">{{ author }}</a>| {{ created_date format="m/d/Y" }} | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                            </div>
                        </div>
                        <div class="post-entry">
                            {{ excerpt length="50" word="true" }}
                        </div>
                        <div class="post-more"><a class="more-link" href="/{{ slug }}">Read more</a></div>
                    </div>

                    {{paginate}} {{ pagination_links }} {{/paginate}}

                {{/content:entries}}
            </div>
        </div>
    </div>
</main>

{{ theme:partial name="footer" }}
