<div class="container">
    <div class="card w-100 mt-4">
        <div class="card-header">Trends</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a class="hashtag-list-sm link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                    #news
                </a>
                <a class="hashtag-list-sm link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                    #todo
                </a>
                <br/>
                <span>{{ \Illuminate\Support\Str::limit("This is a longer card with supporting text below as a natural lead-in to additional content.", $limit = 52, $end = '...') }}</span>
            </li>
            <li class="list-group-item">
                <span>{{ \Illuminate\Support\Str::limit("It's me... Bojack... Horseman... Obviously.", 52, "...") }}</span>
            </li>
            <li class="list-group-item">
                <a class="hashtag-list-sm link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                #slay
                </a>
                <br/>
                <span>{{ \Illuminate\Support\Str::limit("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit elementum lacinia. Nunc feugiat augue id dignissim feugiat. Proin fringilla id velit eu mollis. Curabitur a egestas sem tellus. ", 52, "...") }}</span>
            </li>
        </ul>
    </div>
</div>
