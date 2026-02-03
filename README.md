<img src="http://getkirby.com/assets/images/github/plainkit.jpg" width="300">

**Kirby: the CMS that adapts to any project, loved by developers and editors alike.**
The Plainkit is a minimal Kirby setup with the basics you need to start a project from scratch. It is the ideal choice if you are already familiar with Kirby and want to start step-by-step.

You can learn more about Kirby at [getkirby.com](https://getkirby.com).

### Try Kirby for free

You can try Kirby and the Plainkit on your local machine or on a test server as long as you need to make sure it is the right tool for your next project. … and when you’re convinced, [buy your license](https://getkirby.com/buy).

### Get going

Read our guide on [how to get started with Kirby](https://getkirby.com/docs/guide/quickstart).

You can [download the latest version](https://github.com/getkirby/plainkit/archive/main.zip) of the Plainkit.
If you are familiar with Git, you can clone Kirby's Plainkit repository from Github.

    git clone https://github.com/getkirby/plainkit.git

## What's Kirby?

-   **[getkirby.com](https://getkirby.com)** – Get to know the CMS.
-   **[Try it](https://getkirby.com/try)** – Take a test ride with our online demo. Or download one of our kits to get started.
-   **[Documentation](https://getkirby.com/docs/guide)** – Read the official guide, reference and cookbook recipes.
-   **[Issues](https://github.com/getkirby/kirby/issues)** – Report bugs and other problems.
-   **[Feedback](https://feedback.getkirby.com)** – You have an idea for Kirby? Share it.
-   **[Forum](https://forum.getkirby.com)** – Whenever you get stuck, don't hesitate to reach out for questions and support.
-   **[Discord](https://chat.getkirby.com)** – Hang out and meet the community.
-   **[Mastodon](https://mastodon.social/@getkirby)** – Spread the word.
-   **[Bluesky](https://bsky.app/profile/getkirby.com)** – Spread the word.

---

© 2009 Bastian Allgeier
[getkirby.com](https://getkirby.com) · [License agreement](https://getkirby.com/license)


## fields

### general

section "header"
- field text: titre header
- field files: "image gauche", une seul image, required
- field files: "image droite", une seul image, required

section "intro"
- field writer: juste paragraphe, italic et lien  
- field url: URL pour lien "Ressources atelier kick-off", un seul lien   

section "information"
- filed text: titre
- field bloc: information
  - bloc writer: juste paragraphe, italic et lien
  - bloc CTA:
      - un champs text qui vérifie si c'est bien formaté comme un URL
      - un champs text pour le titre du bouton

section "footer"
- field text: titre
- field bloc:
  - bloc writer: juste paragraphe, italic et lien


## events

field text: sous-titre 
field text: thème
field date: jour et heure
field toggle: inscriptions ouvertes / complet
field information:
- bloc writer: juste paragraphe, italic et lien et emphase
field url: lien vers la billetterie Infomaniak
field file: dépot d'un fichier PDF
