[Startseite](https://gh.disposable-mailbox.eu/de/) - [So funktioniert's](https://gh.disposable-mailbox.eu/de/about.html) - [Warum Wegwerf-eMails?](https://gh.disposable-mailbox.eu/de/why.html) - [FAQ](https://gh.disposable-mailbox.eu/de/FAQ.html) - [News](https://gh.disposable-mailbox.eu/de/news.html) 

## Newsfeed 

### Derzeit keine Neuigkeiten 

---

Test1:
<ul>
 {% for post in site.posts %}
 <li>
  <a href="{{ post.url }}">{{ post.title }}</a>
 </li>
{% endfor %}
</ul>

---

Test2:
{% for tag in site.tags %} 
<h3>{{ tag[0] }}</h3>
<ul> {% for post in tag[1] %} 
<li>
 <a href="{{ post.url }}">{{ post.title }}</a>
</li>
{% endfor %}
</ul>
{% endfor %}

---

Test3:
{% for de in site.categories %} 
<h3>{{ tag[0] }}</h3>
<ul> {% for post in tag[1] %} 
<li>
 <a href="{{ post.url }}">{{ post.title }}</a>
</li>
{% endfor %}
</ul>
{% endfor %}
