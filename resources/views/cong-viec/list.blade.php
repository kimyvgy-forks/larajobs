<style>
    .job-list .job-item-diamond {
        background: yellow;
        text-color: white;
    }
    /* .job-list .job-item:nth-child(2) {
        background: #27A5FE;
        text-color: black;
    }
    .job-list .job-item:nth-child(3) {
        background: #1F08FE;
        text-color: black;
    }
    .job-list .job-item:nth-child(4) {
        background: #0FFEF6;
        text-color: black;
    } */
</style>

<div class="container md:mx-auto md:max-w-screen-md lg:max-w-screen-lg">
    <section class="job-list flex flex-col">
        @foreach ($congViecList as $congViec)
            <div class="job-item {{$congViec->id == 30 ? 'job-item-diamond' : ''}} p-8 border border-solid my-3 rounded-lg hover:border-gray-500">
                {{ $congViec->tieu_de }}
            </div>
        @endforeach
    </section>
</div>
