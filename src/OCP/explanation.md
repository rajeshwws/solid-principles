## Open close Principle

#### States that:

Objects or entities should be open for extension, but closed for modification
Open for extension means: it should be simple to change the behavior

Closed for modification: Change behavior without modifying the original source code...
(We only strife for this, cos it reduces code rot(Editing the same code over and over))

When you have a module you want to extend without modifying, 

```Separate the extensible behavior behind an interface, and flip the dependencies.```

This help achieve `Polymorphism` easily: The ability to have different behavior while still sharing a common interface.