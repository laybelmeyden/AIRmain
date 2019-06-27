var search1 = new Vue({
    el: '#body',
    data: {
        posts: [],
        messageerror: false,
        error: 1,
        query: '',
        events: [],
        allnews: [],
    },
    created(){
        this.query = $('#ins').attr('value');
        this.error = "1";
        this.posts = [];
        axios.get('/api/search?q=' + this.query)
             .then( response => {

                response.data.error ? this.error = response.data.error : this.posts = response.data;
                console.log(this.posts.length);
                this.events = this.posts[0];
                this.allnews = this.posts[1];
                });
        
    },
});