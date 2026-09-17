# Branch policy

- Work on `development` (or a feature branch off it). Never commit or push directly to `master`.
- Changes reach `master` only via a pull request. This repo also enforces this on GitHub (branch protection on `master`), so a direct push attempt will be rejected — but don't attempt it in the first place.
- The plugin's self-updater (see `index.php`) tracks `master`'s `Version:` header directly, not tags/releases. Any PR merged into `master` must bump the `Version:` header in `index.php`, or WordPress installs won't see it as an available update.
