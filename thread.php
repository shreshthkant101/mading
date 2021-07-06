<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <nav class="navigation">
                <ul class="nav-list">                   
                    <li class="nav-item">
                        <a href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php">Log Out</a>
                    </li>
                </ul>
            </nav>
            <div class="top-bar">
                <img src="logo.jpg" style="width:160px;height:54px;">
            </div>
        </div>
    </header>
    <div class="main">
        <div class="header">        
        </div>
        <textarea></textarea>
        <button>add comment</button>
        <div class="comments">
        </div>
    </div>
    <script src="data.js"></script>
    <script>        
        var id = window.location.search.slice(1);
        var thread = threads.find(t => t.id == id);
        var header = document.querySelector('.header');
        var headerHtml = `
            <div class="row">
                <h2 class="title">
                    ${thread.title}
                </h2>
                <h3 class="content">
                    ${thread.content}
                </h3>
                <div class="bottom">
                    <p class="author">
                        ${thread.author}
                    </p>
                    <p class="timestamp">
                        ${new Date(thread.date).toLocaleString()}
                    </p>
                    <p class="comment-count">
                        ${thread.comments.length} comments
                    </p>                
                </div>
            </div>
        `
        header.insertAdjacentHTML('beforeend', headerHtml)
        
        function addComment(comment) {
            var commentHtml = `
                <div class="row">
                    <div class="comment">
                        <div class="top-comment">
                            <p class="user">
                                ${comment.author}
                            </p>
                            <p class="comment-ts">
                                ${new Date(comment.date).toLocaleString()}
                            </p>
                        </div>
                        <div class="comment-content">
                            ${comment.content}
                        </div>
                    </div>
                </div>
            `
            comments.insertAdjacentHTML('beforeend', commentHtml);
        }

        var comments = document.querySelector('.comments');
        for (let comment of thread.comments){
            addComment(comment);
        }

        var btn = document.querySelector('button');
        btn.addEventListener('click', function() {
            var txt = document.querySelector('textarea');
            var comment = {
                content: txt.value,
                date: Date.now(),
                author: '[User]'
            }
            addComment(comment);
            txt.value = '';
            thread.comments.push(comment);
            localStorage.setItem('threads', JSON.stringify(threads));
        })
    </script>
</body>