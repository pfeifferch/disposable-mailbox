---

# Blog 

# DE
<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.de %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
# EN
<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.en %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
# ES
<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.es %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
# HR
<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.hr %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
# NL
<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.nl %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
