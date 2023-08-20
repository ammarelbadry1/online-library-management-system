# ER Diagram Mapping

```mermaid
graph TD
    User
```

| id | name | email | password | role |
| - | - | - | - | - |

***

```mermaid
graph TD
    Book
```

| id | name | content |
| - | - | - |

***

```mermaid
graph TD
    BorrowedBooks
```

| user_id | book_id |
| - | - |
