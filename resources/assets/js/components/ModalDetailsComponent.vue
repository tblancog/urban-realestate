<template>
    <!-- Form Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="addNewLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">


                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <!-- <h1>{{ $question->title }}</h1> -->
                                            <!-- <div class="ml-auto">
                                                <a href="{{ route('questions.index') }}"
                                                    class="btn btn-outline-secondary">Back to all Questions</a>
                                            </div> -->
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <!-- {!! $question->body_html !!} -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <!-- <h2>{{ $question->answers_count . " " . str_plural('Answer', $question->answers_count) }}
                                            </h2> -->
                                        </div>
                                        <hr>
                                        <!-- @foreach($question->answers as $answer) -->
                                        <div class="media">
                                            <div class="media-body">
                                                <!-- {!! $answer->body_html !!} -->
                                                <div class="float-right">
                                                    <!-- <div class="text-muted">Answered {{ $answer->created_date  }}</div> -->
                                                    <div class="media">
                                                        <!-- {{-- <pre>{{ $answer->user->avatar  }}</pre> --}} -->
                                                        <a href="#" class="pr-2">
                                                            <!-- {{-- <img src="{{ $answer->user->url }}"/> --}} -->
                                                        </a>
                                                        <div class="media-body">
                                                            <!-- {{-- <a href="{{ $answer->user->url }}">{{ $answer->user->url  }}</a>
                                                            --}} -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- @endforeach -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- Status -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
</script>
