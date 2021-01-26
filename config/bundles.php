<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Overblog\GraphiQLBundle\OverblogGraphiQLBundle::class => ['dev' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Overblog\GraphQLBundle\OverblogGraphQLBundle::class => ['all' => true],
    Overblog\GraphQL\ProfilerBundle\GraphQLProfilerBundle::class => ['all' => true],
];
