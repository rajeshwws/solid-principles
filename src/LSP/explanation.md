## Liskov Substitution Principle

#### States that:

Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T.

Derived classes must be substitutable for their base classes OR

Any implementation of an abstraction or an interface should be substitutable anywhere that the abstraction is accepted,

Ways to use here 
- Signature must match
- Preconditions can't be greater
- Post conditions at least equal to
- Exceptions types must match

