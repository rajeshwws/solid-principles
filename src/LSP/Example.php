<?php

// First Example
class A {
    public function fire()
    {
        // do something
    }
}

class B extends A {
    public function fire()
    {
        // do something also
    }
}

/**
 * Technically, you should be able to swap out
 * B for A and nothing should break. E.g.
 * @param A $obj
 */
function (A $obj) {
    $obj->fire();
}


// Second Example
class VideoPlayer {
    public function play($file)
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer {

    /**
     * @param $file
     * @throws Exception
     */
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new Exception(); // violates LSP
            /**
             * REASON:
             * One of the rules is that the preconditions for
             * the subclass can't be greater than that of the
             * paren class
             */
        }

    }
}


// Third Example
interface LessonRepository {
    /**
     * @return array
     */
    public function getAll() : array;
}

class FileLessonRepository implements LessonRepository {

    /**
     * @return array
     */
    public function getAll()
    {
        return []; // returns an array
    }
}

class DBLessonRepository implements LessonRepository {

    /**
     * @return array
     */
    public function getAll()
    {
        //return (object)[]; // returns an object
        return [];
    }
}

function foo(LessonRepository $lesson) {
    $lessons = $lesson->getAll();

    if (is_a($lessons, DBLessonRepository::class)) {
        // respond in a different manner
        return 'Something';
    }

    if ($lessons instanceof FileLessonRepository) {
        // respond in a different way too
        return 'something else';
    }
    /**
     * This is a complete violation of the principle,
     * maintain a constant response. Even though interfaces
     * would help with the input, it does not guarantee the output.
     * but I'm almost certain php7 has fixed the issue in a way,
     * by type-hinting the response also.
     */
}
