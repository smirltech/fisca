<?php

describe("App",function () {
    it('return a 302 code', function () {
        $response = $this->get('/');
        expect($response->status())->toBe(302);
    });
});
