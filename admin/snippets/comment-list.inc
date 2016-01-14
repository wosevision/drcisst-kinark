<cms:if k_is_page >
    <cms:comments page_id=k_page_id limit='5' order='asc' paginate='1'>
        <cms:if k_paginated_top >
            <h3><cms:show k_total_records /> Comments</h3>
            <ul id="commentlist">
        </cms:if>
       
        <li id="comment-<cms:show k_comment_id />">
            <cms:gravatar email="<cms:show k_comment_author_email />" size="100" />
                <cite>
                    <span class="commenter">
                        <cms:if k_comment_author_website >
                            <a class="url" rel="external nofollow" href="<cms:show k_comment_author_website />"><cms:show k_comment_author /></a>
                        <cms:else/>
                            <cms:show k_comment_author />
                        </cms:if>
                        Says:
                    </span>
                    <br/>
                    <span class="meta"><a name="<cms:show k_comment_anchor />"><cms:date k_comment_date format='F j, Y'/> at <cms:date k_comment_date format='h:ia'/></a></span>
                </cite>
           
            <div class="comment_text">
                <cms:show k_comment />
            </div>
           
        </li>
       
        <cms:if k_paginated_bottom >
            </ul>
        </cms:if>
       
        <cms:paginator />
       
    </cms:comments>
</cms:if>