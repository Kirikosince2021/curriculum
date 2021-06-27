var app = new Vue({
    el: '#app',
    data: {
        list: [],
        addText: '',
        searchWord: '',
    },
    //watchでlistの変更を監視
    watch: {
        list: {
            handler: function() {
                //localStorageにデータを保存
                localStorage.setItem("list", JSON.stringify(this.list));
            },
            deep: true
        }
    },
    //マウントされた時にlocalStorageからデータを取得
    mounted: function() {
        this.list = JSON.parse(localStorage.getItem("list")) || [];
    },
    methods: {
        addToDo: function() {
            if (this.addText !== '') {
                this.list.push({
                    text: this.addText, 
                    isChecked: false,
                });
            }
            this.addText = '';
        },
        deleteBtn: function() {
            this.list = this.list.filter(function(todo) {
                return !todo.isChecked;
            });
        }
    },
    computed: {
        left: function() {
            return this.list.filter(function(todo) {
                return !todo.isChecked;
            }).length;
        },
        listAll: function() {
            return this.list.length;
        },
        searchedList: function() {
            var searchedList = [];
            for(var i in this.list) {
                var target = this.list[i];
                if(target.text.indexOf(this.searchWord) !== -1) {
                    searchedList.push(target);
                }
            }
            return searchedList;
        }
    }
});