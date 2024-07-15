<style>
    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
        height: 100vh;
    }
    .main-container {
        display:flex;
        height:calc(100vh - 32px);
        flex-direction:column;
        background-image:url('../../assets/img/window.png');
        background-size: 500px;
        background-position: center;
        background-repeat: no-repeat;
    }
    .main-row {
        display: flex;
    }
    .main-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100px;
    }
    .btn img {
        width: 40px;
    }
</style>
<body>
    <div class='main-container p-3'>
        <!-- 첫번째 -->
        <div class="main-row">
            <div class="main-column">
                <button type="button" class="btn btn-light btn-lg m-2" data-toggle="modal" data-target="#modalInfo">
                    <img src="../../assets/img/window.png" style="width:40px;">
                </button>
                <h5>info</h5>
            </div>
            <div class="main-column">
                <button type="button" class="btn btn-light btn-lg m-2" data-toggle="modal" data-target="#modalTrash">
                    <img src="../../assets/img/trash.png" style="width:40px;">
                </button>
                <h5>trash</h5>
            </div>
        </div>
        <!-- 두번째 -->
        <div class="main-row">
            <div class="main-column">
                <button type="button" class="btn btn-light btn-lg m-2"  data-url="https://github.com/seunghwan94" onclick="moveURL(this)">
                    <img src="../../assets/img/github.png" style="width:40px;">
                </button>
                <h5>github</h5>
            </div>
            <div class="main-column">
                <button type="button" class="btn btn-light btn-lg m-2" data-toggle="modal" data-target="#modalWindow">
                    <img src="../../assets/img/earth.png" style="width:40px;">
                </button>
                <h5>window</h5>
            </div>
        </div>
        <!-- 세번째 -->
        <div class="main-row">
            <div class="main-column">
                <button type="button" class="btn btn-light btn-lg m-2" data-toggle="modal" data-target="#modalFolder">
                    <img src="../../assets/img/folder.png" style="width:40px;">
                </button>
                <h5>folder</h5>
            </div>
        </div>
    </div>

    
    <!-- Info Modal -->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoLabel">Info Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Info modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trash Modal -->
    <div class="modal fade" id="modalTrash" tabindex="-1" role="dialog" aria-labelledby="modalTrashLabel" aria-hidden="true" data-url="http://magolee/fnt/trash">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modalContentTrash" style="padding:0px">
                    <!-- Trash 이동 -->
                </div>
            </div>
        </div>
    </div>

    <!-- Window Modal -->
    <div class="modal fade" id="modalWindow" tabindex="-1" role="dialog" aria-labelledby="modalWindowLabel" aria-hidden="true" data-url="http://magolee/fnt/site">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modalContentWindow" style="padding:0px">
                    <!-- Window 이동 -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Folder Modal -->
    <div class="modal fade" id="modalFolder" tabindex="-1" role="dialog" aria-labelledby="modalFolderLabel" aria-hidden="true" data-url="http://magolee/fnt/folder">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modalContentFolder" style="padding:0px">
                    <!-- Folder 이동 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script>

$(document).ready(function() {
    $('#modalTrash').on('show.bs.modal', function (e) {
        var dataUrl = $(this).data('url');
        $.ajax({
            url: dataUrl, // HTTPS 프로토콜 사용
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#modalContentTrash').html(data); // 모달의 내용을 가져온 데이터로 설정
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
    
    $('#modalWindow').on('show.bs.modal', function (e) {
        var dataUrl = $(this).data('url');
        $.ajax({
            url: dataUrl, // HTTPS 프로토콜 사용
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#modalContentWindow').html(data); // 모달의 내용을 가져온 데이터로 설정
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });

    $('#modalFolder').on('show.bs.modal', function (e) {
        var dataUrl = $(this).data('url');
        $.ajax({
            url: dataUrl, // HTTPS 프로토콜 사용
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#modalContentFolder').html(data); // 모달의 내용을 가져온 데이터로 설정
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });

});

</script>